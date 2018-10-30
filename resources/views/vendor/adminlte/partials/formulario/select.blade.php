<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $select ?? "ERRO" }}</span>
    {{!! Form::select, $data ?? [] !!}}
</label>